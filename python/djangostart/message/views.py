# _*_ coding:utf-8 _*_

from django.shortcuts import render
import MySQLdb
import django
django.setup()
from .models import UserMessage

# Create your views here.

def getform(request):
    # 删除数据
    # all_messages = UserMessage.objects.filter(name='联谊',address='上海')
    # for message in all_messages:
    #     message.delete()

    # 取数据
    all_messages = UserMessage.objects.filter(name='静观流叶')
    if all_messages:
        message = all_messages[1]


    # 增加数据到数据库中
    # if request.method == "POST":
    #     name = request.POST.get('name', '')
    #     message = request.POST.get('message', '')
    #     address = request.POST.get('address', '')
    #     email = request.POST.get('email', '')
    #
    #     user_message = UserMessage()
    #     user_message.name = name
    #     user_message.message = message
    #     user_message.address = address
    #     user_message.email = email
    #     user_message.object_id = "pp"
    #     user_message.save()

    return render(request, 'message_form.html', {
        "my_message":message
    })
