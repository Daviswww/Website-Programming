#!D:\Python\python.exe
print("Content-Type: text/html; charset=utf-8\n\n")

import cgi
import math

form = cgi.FieldStorage()

a	= float(form.getvalue('a'))
b	= float(form.getvalue('b'))
c	= float(form.getvalue('c'))
n	= float(form.getvalue('n'))
tmp = (2*float(a)+(b-a)/n)/2
ary = [tmp]
i = 1
while(i <= 10000):
    ary.insert( i, ((b-a)/n + ary[i-1]));
    i+=1
sum = 0;
i = 1
while(i <= 10000):
    sum += 1.0/math.sqrt(ary[i]+c);
    i+=1
sum *= (b-a)/n
print('<!DOCTYPE html>')
print('<html>')
print('<head>')
print('	<title>model</title>')
print('</head>')
print('<body>')
print('The integral is %.10f.'%(sum))
print('</body>')
print('</html>')