document.addEventListener('DOMContentLoaded', function() {
    const allStar = document.querySelectorAll('.fa-star');
    const ratingValue = document.querySelector('.rating input')
    allStar.forEach((item, idx) => {
        item.addEventListener('click', function () {
            ratingValue.value = idx + 1
            console.log(ratingValue.value)
            for(let i = 0; i < allStar.length; i++){
                if(i <= idx){
                    allStar[i].classList.replace('fa-regular', 'fa-solid');
                } 
                else {
                    allStar[i].classList.replace('fa-solid', 'fa-regular');
                }
            }
        });
    });
});
