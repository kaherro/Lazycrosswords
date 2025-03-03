import codecs
#read input file
with codecs.open('input.txt', 'r', encoding = 'utf8') as file:
    lines = file.read()  

#write output file
with codecs.open('input.txt', 'w', encoding = 'ansi') as file:
    file.write(lines)