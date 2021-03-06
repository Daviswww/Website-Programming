#!D:\Python\python.exe
print("Content-Type: text/html; charset=utf-8\n\n")

import cgi

form = cgi.FieldStorage()

Name 	= form.getvalue('Name')
Address = form.getvalue('Address')
City 	= form.getvalue('City')
Phone 	= form.getvalue('Phone')

Unpopped 	= form.getvalue('Unpopped')
Caramel 	= form.getvalue('Caramel')
CaramelNut 	= form.getvalue('CaramelNut')
ToffeyNut 	= form.getvalue('ToffeyNut')

op 	= form.getvalue('op')
items =  int(Unpopped) +  int(Caramel) + int( CaramelNut) +  int(ToffeyNut)
total = int(Unpopped) * 3 + int(Caramel) * 3.5 + int(CaramelNut) * 4.5 + int(ToffeyNut) * 5
print("<!DOCTYPE html>")
print("<html>")
print("<head>")
print("	<title>View</title>")
print("	<style>")
print("	table, th, td {")
print("	    border: 2px solid black;")
print("	    border-collapse: collapse;}")
print("	</style>")

print("</head>")
print("<body>")
print("<h1>Welcome to Popcorn Little Station - Your Receipt</h1>")
print("Customer:<br>")
print(Name, "<br>")
print(Address, "<br>")
print(City, "<br>")
print('<p>Order Information</p>')

print("<table>")
print("		<tr>")
print("			<td>Product</td>")
print("			<td>Price</td>")
print("			<td>Quantity</td>")
print("			<td>Item Cost</td>")
print("		</tr>")
print("		<tr>")
print("			<td>Unpopped Popcorn (1 lb.)</td>")
print("			<td>$3.00</td>")
print("			<td>",Unpopped,"</td>")
print("			<td>$",(int(Unpopped) * 3),"</td>")
print("		</tr>")
print("		<tr>")
print("			<td>Caramel Popcorn (2 lb. canister)</td>")
print("			<td>$3.50</td>")
print("			<td>",Caramel,"</td>")
print("			<td>$",(int(Caramel) * 3.5),"</td>")
print("		</tr>")
print("		<tr>")
print("			<td>Caramel Nut Popcorn (2 lb. canister)</td>")
print("			<td>$4.50</td>")
print("			<td>",CaramelNut,"</td>")
print("			<td>$",(int(CaramelNut) * 4.5),"</td>")
print("		</tr>")
print("		<tr>")
print("			<td>Toffey Nut Popcorn (2 lb. canister)</td>")
print("			<td>$5.00</td>")
print("			<td>",ToffeyNut,"</td>")
print("			<td>$",(int(ToffeyNut) * 5),"</td>")
print("		</tr>")
print("	</table>")
print("You ordered",items,"popcorn items. <br>")
print("Your total bill is: $", total, ".<br>")
print("Your chosen method of payment is: ", op, ".<br>")
print("</body>")
print("</html>")