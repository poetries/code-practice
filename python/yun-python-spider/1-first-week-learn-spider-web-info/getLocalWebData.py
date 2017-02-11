# 获取本地的网页数据
from bs4 import BeautifulSoup

with open('G:/code-practice/python/yun-python-spider/1-first-week-learn-spider-web-info/the_blah.html') as web_data:
    Soup = BeautifulSoup(web_data)
    images = Soup.select('body > div.main-content > ul > li > img')
    titles = Soup.select('body > div.main-content > ul > li > h3 > a')
    desc = Soup.select('body > div.main-content > ul > li > p')

for title, image, des in zip(titles, titles, desc):
    data = {
        'title': title.get_text(),
        'image': image.get('src'),
        'desc': des.get_text()
    }
    print(data)

