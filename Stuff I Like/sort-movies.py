import pandas as pd
from io import StringIO

with open("movies.txt", "r") as file:
    lines = file.readlines()

lines.pop(1)  # Remove the second line

markdown_str = "".join(lines)

data = pd.read_csv(StringIO(markdown_str), delimiter="|", skipinitialspace=True)
data.columns = [col.strip() for col in data.columns]
data = data.drop(data.columns[0], axis=1).drop(data.columns[-1], axis=1)
data_sorted = data.sort_values(by="Title")
data_sorted["Sno."] = range(1, len(data_sorted) + 1)
sorted_markdown = data_sorted.to_markdown(index=False)

with open("movies.txt", "w") as file:
    file.write(sorted_markdown)

print("File has been updated with sorted data.")
