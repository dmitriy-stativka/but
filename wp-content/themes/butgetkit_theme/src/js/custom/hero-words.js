window.addEventListener('load', () => {
    function animationTop(selector, interval) {
        const parentSelector = document.querySelector(selector);
        const children = [...parentSelector.children];

        function forEach() {
            children.forEach((child, index) => {
                setTimeout(() => {

                    if (index == children.length - 1) {
                        setTimeout(() => {
                            forEach();
                        }, interval);
                    }
                    children.forEach(element => {
                        element.classList.remove('active');
                    });
                    child.classList.add('active');

                }, interval * index);
            });
        }
        forEach();
    }
    animationTop('.hero_section-content-img', 4000);
    animationTop('.hero-words', 4000);
});