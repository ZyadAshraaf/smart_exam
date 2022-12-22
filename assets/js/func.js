function changeLanguage() {
    if (document.querySelector('.en')) {
        window.location.href = location.href.replace('smartexam/en','smartexam/ar');
    }else if(document.querySelector('.ar')){
        window.location.href = location.href.replace('smartexam/ar','smartexam/en');
    }
}

var popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {
    trigger: 'focus'
  })

  location.href=location.href.replace('smartexam/ar/','smartexam/en/') ;