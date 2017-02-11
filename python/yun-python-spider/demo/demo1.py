def account_login():
    password = input('Password:')
    if password == '12345':
        print("Login success")
    else:
        print("Wrong password")
        account_login()
account_login()

