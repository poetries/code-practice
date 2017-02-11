# reset password
passwrod_list = ['###', '12345']
def account_login():
    password = input('Password:')
    password_correct = password == passwrod_list[-1]
    password_reset = password == passwrod_list[-2]
    if password_correct:
        print('Login success')
    elif password_reset:
        new_password = input('Plase enter a New Password:')
        passwrod_list.append(new_password)
        print('Your Password has changed successfully!')
        account_login()
    else:
        print('Wrong Password')
        account_login()
account_login()