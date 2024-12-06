var id = document.getElementById("id");
var pwd = document.getElementById("pwd");
function check() {
    if(!id.value) {
        alert("아이디를 입력하세요");
        id.focus();
        return;
    }
    if(!pwd.value) {
        alert("비밀번호를 입력하세요");
        pwd.focus();
        return;
    }
    alert("모두 작성했습니다. 최종제출됩니다.");
    document.getElementById("login_form").submit();
}