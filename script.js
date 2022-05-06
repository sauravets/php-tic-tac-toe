function enableButton() {
    let elem = document.getElementById('playbtn');
    if(typeof elem !== 'undefined' && elem !== null) {
      elem.disabled = false;
    }
}
enableButton();