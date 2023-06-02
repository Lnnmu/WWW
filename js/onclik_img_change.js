function onclick_img_change(id, src1, src2) {
    var flag = true;
    var img = document.getElementById(id);
    img.onclick = function () {
        if (flag) {
            img.src = src2;
            flag = false;
        } else {
            img.src = src1;
            flag = true;
        }
    }
}