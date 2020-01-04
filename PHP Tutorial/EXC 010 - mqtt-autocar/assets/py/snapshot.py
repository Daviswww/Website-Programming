import requests

url = 'http://172.20.10.2:8080/?action=snapshot'
r=requests.get(url)

with open('../assets/img/a.jpg', 'wb') as f:
    f.write(r.content)
