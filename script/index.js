$('.top-selling ').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})

function filtera() {
    const button = document.querySelectorAll('.filter')
    const storeitems = document.querySelectorAll('.store-item')

    button.forEach((button) => {
        button.addEventListener('click', (e) => {
            e.preventDefault()
            const filter = e.target.dataset.filter

            storeitems.forEach((item) => {
                if (filter === "all") {
                    item.style.display = 'block'
                }
                else {
                    if (item.classList.contains(filter)) {
                        item.style.display = 'block'
                    } else {
                        item.style.display = 'none'
                    }
                }
            })
        })
    })
};

filtera();


let pname = document.getElementById('pname');
console.log(pname);

