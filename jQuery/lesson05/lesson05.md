- **ajax** : `Asynchronous Javascript And XML` ���첽��`JavaScript`��`XML`��

#### һ.����`ajax`���� `var xhr = new XMLHttpRequest();`

#### ��.׼����������

- 1. get / post


- form����:
	- `action`:
	- `method`:(Ĭ����` get`)
	- `get`: ����url������ `name=value` , ��������֮���� `&` ����
	- `post`:
- `enctype`: `"application/x-www-form-urlencoded"`



- 2. `url`

- 3. �Ƿ��첽
	- ͬ��(`false`)������
	- �첽(`true`)��������
	
#### ��.��ʽ��������

#### ��.`ajax`���������

```javascript
xhr.onreadystatechange = function(){
	if (xhr.readyState == 4)
	{
		alert( xhr.responseText );
	}
};
```

- `onreadystatechange` ����������̷����仯��ʱ��ִ������ĺ���

- `readyState` ��`ajax`�������
  - 0������δ��ʼ������û�е��� open()����
  - 1�������Ѿ����������ǻ�û�з��ͣ���û�е��� send()����
  - 2�������ѷ��ͣ����ڴ����У�ͨ�����ڿ��Դ���Ӧ�л�ȡ����ͷ����
  - 3�������ڴ����У�ͨ����Ӧ�����в������ݿ����ˣ����Ƿ�������û�������Ӧ�����ɡ�
  - 4����Ӧ����ɣ������Ի�ȡ��ʹ�÷���������Ӧ�ˡ�

- responseText ��������������ص����ݴ��ڸ���������
- status : http״̬��
