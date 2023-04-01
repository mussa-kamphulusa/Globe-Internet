import os
from glob import glob
os.chdir(r'B:/programming/Projects/Globe Internet')

def find_html_files(dir=r"."):
    os.chdir(dir)
    html_files = [os.path.abspath(file) for file in glob('**/*.html', recursive=True)]
    
    for file in html_files:
        data = open(file, 'rb').read().decode()
        if 'no code' in data.lower():
            html_files.pop(html_files.index(file))
    return html_files

def cls():
    os.system("cls")
