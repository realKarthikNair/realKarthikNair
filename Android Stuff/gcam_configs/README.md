These are the Gcam8 configs I use on my personal device. 

```
Device: RMX2193 / Realme Narzo 20 / Realme 7i (EU)
OS: Android 12 (NusantaraOS 4.0-1)
Gcam: MGC_8.7.250_A11_V5
package: com.codeaurora.snapcam
```

*[google.com](https://www.google.com) is your friend when it comes to learning about installing Gcam on your device and using these configs.*

These configs are optimized for capturing the best photos possible within the limitations of this device's hardware (especially the processor). 

- The photos captured would be large in size, mostly since I have set JPEG compression to 100%, resulting in photos with more details and color accuracy. 

- Features that doesn't work on our device has been turned off, wherever I had the option. This includes Google Lens Suggestions, 60 fps option, macro lens (wide angle lens works fine*) and keeping the UI at Pixel 3 level (since anything higher has more features but they just crashes and don't work on our device).

- Features that does show up but doesn't work on this device includes 4k/8k videos resolutions, face retouching, 8x slow motion, top shot and "hold to record short video feature"

- Slow motion at 4x speed (720p) works perfectly on my device via Gcam (however, attempting to shoot 8x results in Gcam crashing)

If you are on stock ROM, prefer stock camera app for videos since 60 fps is not supported on gcam for this device and stock camera shoots comparatively more *stable* videos. If you are on a custom ROM, Gcam shoots the best possible videos too.

I must also mention that OpenCamera by Mark Harman can shoot upto 1440p/1080p 30 fps and 720p 30/60/90/120 fps videos on this device, the latter resolution and FPSs being not very useful unless you have a lot of light. 

These settings weren't tested on realme UI since I don't use realme UI, but it should work just fine, though only on realme UI 2.0 (Android 11 stock ROM), not realme UI 1.0 since realme's android 10 kernel isn't really capable enough.
 
*Also, be aware that the wide angle lens won't work on gcams unless you have fixed it manually (which I have on my device).