import codecs
#read input file
with codecs.open('grid_keys.php', 'r', encoding = 'ansi') as file:
    lines = file.read()  

#write output file
with codecs.open('grid_keys.php', 'w', encoding = 'utf8') as file:
    file.write(lines)