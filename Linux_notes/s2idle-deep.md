FROM https://devnull.land/laptop-s2idle-to-deep


<html>
<body>
	<div class="container">
		<div class="row">
			<div class="column">
				<h1>
					<a href="/">devnull.land</a>
				</h1>
				<blockquote>Miscellaneous bits and bobs from the tech world</blockquote>
				<hr />
			</div>
		</div>
	</div><div class="container">
	<div class="row">
		<div class="column">
			<h2>Changing laptop suspend from s2idle to deep sleep </h2>
			<p><small>9/18/2021, 3:15:42 PM</small></p>
			<hr />
			<p>One thing I noticed ever since I bought my second Dell XPS was that the battery life was relatively abysmal when the laptop was asleep. I'd suspend my laptop at work, bring the laptop home, and the next morning I'd be down 25-50% of my battery life! More than once, I'd leave my laptop for a couple days and come back to a completely dead laptop<sup>1</sup>.</p>
<p>My first inclination was that the laptop was waking up on its own. It does happen occasionally with Linux (which, in an of itself, is pretty concerning<sup>2</sup>), but in this case, I was reasonably certain it wasn't the case, as evidenced by the battery drop overnight when waking a still-sleeping laptop.</p>
<p>While there are a plethora of articles online about sleep/standby (suspend to RAM) and hibernate (suspend to disk), the root cause was that some hardware configurations support three different modes of sleep: <code>s2idle</code>, <code>shallow</code>, and <code>deep</code>.</p>
<p>According to the <a href="https://www.kernel.org/doc/html/v4.15/admin-guide/pm/sleep-states.html">Linux Kernel documentation</a>:</p>
<blockquote>
<p>[Suspend-to-idle] is a generic, pure software, light-weight variant of system suspend (also referred to as S2I or S2Idle). It allows more energy to be saved relative to runtime idle by freezing user space, suspending the timekeeping and putting all I/O devices into low-power states (possibly lower-power than available in the working state), such that the processors can spend time in their deepest idle states while the system is suspended.</p>
</blockquote>
<blockquote>
<p>[Standby] offers moderate, but real, energy savings, while providing a relatively straightforward transition back to the working state. No operating state is lost (the system core logic retains power), so the system can go back to where it left off easily enough.</p>
</blockquote>
<blockquote>
<p>[Suspend-to-RAM] offers significant energy savings as everything in the system is put into a low-power state, except for memory, which should be placed into the self-refresh mode to retain its contents.</p>
</blockquote>
<p>You can see what mode your system is currently set to, by calling <code>cat /sys/power/mem_sleep</code> as any user (<a href="https://old.reddit.com/r/Dell/comments/8b6eci/xp_13_9370_battery_drain_while_suspended/dx4ftc5/?context=3">source</a>):</p>
<pre><code>julian@roci:~$ cat /sys/power/mem_sleep 
[s2idle] deep
</code></pre>
<p>On my laptop, the hardware supports <code>s2idle</code> and <code>deep</code>, which represents Suspend-to-RAM. The tradeoff of switching to deep sleep is that the laptop will take a little longer to resume. An <code>s2idle</code> wake would be near immediate, whereas a <code>deep</code> wake would take perhaps 5 seconds; a tradeoff I was more than willing to accept.</p>
<p>To change this setting temporarily:</p>
<pre><code>julian@roci:~$ sudo su
root@roci:/home/julian# echo deep &gt; /sys/power/mem_sleep
</code></pre>
<p>The first line logs me into the root user via <code>sudo</code>, and the second changes the sleep mode.</p>
<h2>Persist the change across reboots</h2>
<p>To make this change permanent, you can pass a setting to the Grub bootloader (<a href="https://askubuntu.com/questions/19486/how-do-i-add-a-kernel-boot-parameter">source</a>). As the root user:</p>
<ol>
<li>Edit <code>/etc/default/grub</code> using your favourite editor. Use <code>nano</code> if you do not have a favourite editor (trust me on this one, you don't want to get stuck inside vim)</li>
<li>Find the line beginning with <code>GRUB_CMDLINE_LINUX_DEFAULT</code></li>
<li>Add <code>mem_sleep_default=deep</code> within the quotes. For me, the line would now read: <code>GRUB_CMDLINE_LINUX_DEFAULT=&quot;quiet splash mem_sleep_default=deep&quot;</code></li>
<li>Save and exit the editor</li>
<li>Execute <code>update-grub</code> to re-generate the grub config</li>
</ol>
<p>I've found that even with the above steps, occasionally my laptop will be set back to <code>s2idle</code>. I have not figured out why that is the case. Think you might know why? <a href="https://gist.github.com/julianlam/166823c982fd20ee4a748442cc77bbef">Let me know as a comment here</a>.</p>
<hr>
<h2>In other places...</h2>
<p>It seems I may not be the only one frustrated by this. I discovered today that this feature is called &quot;modern suspend&quot;. Of note is that on Windows systems, modern suspend <strong>cannot be changed</strong> unless the OS is completely reinstalled. <a href="https://www.dell.com/support/kbdoc/en-ca/000133095/xps-13-9343-9360-9370-excessive-battery-drain-while-sleeping">Dell's workaround to this issue</a> is to create a shell file that shuts down the computer, and to use this option instead of sleeping 🤯. It is wonderful to know that this is a configurable option in Linux.</p>
<ul>
<li><a href="https://www.dell.com/community/XPS/FAQ-Modern-Standby/td-p/7514448">[Dell] Modern Standby FAQ</a> | <a href="https://news.ycombinator.com/item?id=28639952">[Hacker News] Discussion, 24 Sept 2021</a></li>
</ul>
<hr>
<h2>Footnotes</h2>
<p><sup>1</sup> With a desktop at home, I occasionally leave my laptop in my bag for days on end. Modern suspend essentially precludes me from being able to <em>reliably</em> pick up my laptop and go. There have been times where I am on the train, am notified of a work emergency, and open my laptop to discover that I have 5 minutes of battery life left.</p>
<p><sup>2</sup> One time, my laptop woke up while I was in line at an airport screening checkpoint. Imagine my surprise when I pulled out a too-hot-to-handle laptop with its fan at full blast!</p>
<h2>Revisions</h2>
<ol>
<li>24 September 2021 – encountered a discussion about this on <a href="https://news.ycombinator.com/item?id=28639952">Hacker News</a>, and updated this post accordingly with some fresh thoughts</li>
</ol>

		</div>
	</div>
</div></body>
</html>
