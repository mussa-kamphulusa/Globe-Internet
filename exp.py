import os
from glob import glob
from pyperclip import paste
from time import ctime

os.chdir(r'projects/globe internet')

html_files = [os.path.abspath(file) for file in glob('**/*.html', recursive=True)]

search = b"""Main site content"""
replace = b"""Main content"""


def check(hint, files):
    count = 0
    result = []
    for file in files:
        data = open(file, 'rb').read()
        if hint in data:
            count += 1
            result.append(file)
    return count, result

def modify(_from, _to, files):
    count = 0
    modified = []

    for file in files:
        data = open(file, 'rb').read()
        if  _from in data:
            new_data = data.replace(_from, _to)
            new_file = open(file, 'wb')
            new_file.write(new_data)
            new_file.close()
            count += 1
    return count, modified
    
data = modify(search, replace, html_files)
print(data[0])
# for file in html_files:
#     if file not in data[1]:
#         print(file)