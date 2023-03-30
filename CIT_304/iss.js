var reggie = document.getElementsByClassName('reggie')[0]
var regs = document.getElementsByClassName('register')[0]
var makeslctns = document.getElementsByClassName('makeslctn')[0]
var mkslctn = document.getElementsByClassName('mkslctn')[0]
var checkslctns = document.getElementsByClassName('checkslctn')[0]
var chkslctn = document.getElementsByClassName('chkslctn')[0]
regs.addEventListener('click', function(e) {
    var regss = e.target
    reggie.style.display = 'block'
    makeslctns.style.display = 'none'
    checkslctns.style.display = 'none'
})
mkslctn.addEventListener('click', function(e) {
    var makeslctn = e.target
    reggie.style.display = 'none'
    makeslctns.style.display = 'block'
    checkslctns.style.display = 'none'
})
chkslctn.addEventListener('click', function(e) {
    var checkslctn = e.target
    reggie.style.display = 'none'
    makeslctns.style.display = 'none'
    checkslctns.style.display = 'block'
})