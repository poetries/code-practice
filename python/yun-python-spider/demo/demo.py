def trapezoid_area(base_up, base_down, height):
    return 1/2 * (base_up + base_down) * height

def text_create(name, msg):
    desktop_path = 'users/poetries/Desktop/'
    full_path = desktop_path + name + '.txt'
    file = open(full_path, 'w')
    file.write(msg)
    file.close()
    print('Finish...')
text_create('hello', 'hello world')
