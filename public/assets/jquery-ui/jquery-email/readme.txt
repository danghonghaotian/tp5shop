CSS���룺

.out_box{border:1px solid #ccc; background:#fff; font:12px/20px Tahoma;}
.list_box{border-bottom:1px solid #eee; padding:0 5px; cursor:pointer;}
.focus_box{background:#f0f3f9;}
.mark_box{color:#c00;}

HTML���룺

<p>�Զ���classչʾ��<input type="text" id="customTest" size="28" /></p>

JS���룺

$("#customTest").mailAutoComplete({
    boxClass: "out_box", //�ⲿbox��ʽ
    listClass: "list_box", //Ĭ�ϵ��б���ʽ
    focusClass: "focus_box", //�б�ѡ��ʽ��
    markCalss: "mark_box", //������ʽ
    autoClass: false,
    textHint: true, //��ʾ�����Զ�����
    hintText: "�����������ַ"
});

http://www.zhangxinxu.com/wordpress/2010/06/%E6%96%87%E6%9C%AC%E6%A1%86%E9%82%AE%E7%AE%B1%E5%9C%B0%E5%9D%80%E8%87%AA%E5%8A%A8%E6%8F%90%E7%A4%BAjquery%E6%8F%92%E4%BB%B6/