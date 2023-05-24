let successModal = document.getElementById('successModal');
let closeModal = document.querySelector('.close');

document.addEventListener('DOMContentLoaded', () => {
    successModal.style.display = "block";
})

setTimeout(function () {
    successModal.style.display = "none";
}, 10_000);

closeModal.addEventListener('click', () => {
    successModal.style.display = "none";
})



