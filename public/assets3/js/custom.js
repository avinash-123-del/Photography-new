// ------------------------------------------------------- OWL carousel -------------------------------------

$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        center: true,
        // autoplayTimeout: 2500,
        // autoplay: true,
        nav: true, // Hide default nav buttons
        items: 3,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // Custom Navigation Events
    $('#customPrevBtn').click(function () {
        owl.trigger('prev.owl.carousel');
    });

    $('#customNextBtn').click(function () {
        owl.trigger('next.owl.carousel');
    });
});


$(document).ready(function () {
    var owl = $('.owl-carousel-2');
    owl.owlCarousel({
        loop: true,
        margin: 2,
        dots: true,
        center: true,
        // autoplayTimeout: 2000,
        // autoplay: true,
        nav: true, // Hide default nav buttons
        items: 3,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            768: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

    // Custom Navigation Events
    $('#customPrevBtn').click(function () {
        owl.trigger('prev.owl.carousel');
    });

    $('#customNextBtn').click(function () {
        owl.trigger('next.owl.carousel');
    });
});


// ============================================================ Progress bar ===============================
function createProgressBar(containerId, targetValue) {
    let bar = new ProgressBar.Line(containerId, {
        strokeWidth: 0.4,
        easing: 'easeInOut',
        duration: 1400,
        color: '#FEC544',
        trailColor: '#d3d3d3',
        trailWidth: 1,
        svgStyle: { width: '100%', height: '100%', },
        text: {
            style: {
                color: '#999',
                position: 'absolute',
                right: '0',
                top: '30px',
                padding: 0,
                margin: 0,
                transform: null
            },
            autoStyleContainer: false
        },
        from: { color: '#FFEA82' },
        to: { color: '#ED6A5A' },
        step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + ' %');
        }
    });

    function animateProgressBar() {
        bar.animate(targetValue / 100);  // Number from 0.0 to 1.0
    }

    return animateProgressBar;
}

document.addEventListener("DOMContentLoaded", function () {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5
    };

    function observerCallback(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const animateProgressBar = entry.target.animateProgressBar;
                animateProgressBar();
                observer.unobserve(entry.target);
            }
        });
    }

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    const progressBarTargets = [
        { id: 'progress-container-80', value: 80 },
        { id: 'progress-container-81', value: 81 },
        { id: 'progress-container-65', value: 65 },
        { id: 'progress-container-78', value: 78 },
        { id: 'progress-container-67', value: 67 },
        { id: 'progress-container-90', value: 90 },
        { id: 'progress-container-91', value: 91 },
    ];

    progressBarTargets.forEach(target => {
        const container = document.getElementById(target.id);
        container.animateProgressBar = createProgressBar(`#${target.id}`, target.value);
        observer.observe(container);
    });
});


