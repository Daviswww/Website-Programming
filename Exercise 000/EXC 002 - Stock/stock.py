#!C:\Python\Python37\python.exe
# Import modules for CGI handling, MySQL
import cgi, cgitb, mysql.connector
# Create instance of FieldStorage

print("Content-type:text/html\r\n\r\n")
print("<html>")
print("<head>")
print("<title> Access the Stock table in MySQL </title>")
print("</head>")
print("<body>")

mydb = mysql.connector.connect(
    host = "localhost",
    user = "web",
    passwd = "web123",
    database = "commerce"
)

mycursor = mydb.cursor()

form = cgi.FieldStorage()
operation = form.getvalue('query')
ticker = form.getvalue('ticker')
company = form.getvalue('company')
price = form.getvalue('price')
#operation, ticker, company, price = "Add, "MSFT", "Microsoft Inc.", 100
#print("%s %s %s %s" % (operation, ricker, company, price))
if(operation == 'Add'):
    if(ticker != "" and company != "" and price != ""):
        query = "INSERT INTO stock (ticker, company, price) VALUES (%s, %s, %s)"
        val = (ticker, company, price)
        mycursor.execute(query, val)
        mydb.commit()
        print("%s, %s, %s is added." % (ticker, company, price))
elif(operation == 'Delete' and ticker != ""):
    query = "delete from stock where ticker = '%s'" % (ticker)
    mycursor.execute(query)
    mydb.commit()
    print("%s is deleted." % (ticker))
elif(operation == 'Search' or operation == 'List'):
    if(operation == 'Search'):
        query = "select * from Stock where price < %s" % (price)
    elif(operation == 'List'):
        query = "select * from Stock"
    mycursor.execute(query)
    myresult = mycursor.fetchall()
    for stock in myresult:
            print(stock[0], stock[1], stock[2], "<br/>")
print("</body>")
print("</html>")
