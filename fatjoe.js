$(document).ready(function () {
    let interval;
    const $container = $('.fat_joe-container');
    const $scrollUp = $('.up-scroll');
    const $scrollDown = $('.down-scroll');
    
    const containerHeight = $container.height();
    const moveSpeed = 0.1; // Slow speed for smooth scrolling

    // Set initial positions for both scroll divs
    $scrollUp.css('transform', 'translateY(0px)');
    $scrollDown.css('transform', `translateY(${containerHeight + 400}px)`); // Adjusting the initial gap to 400px

    // Function to start the scrolling animation
    function startScroll() {
        interval = setInterval(() => {
            const currentScrollUp = parseFloat($scrollUp.css('transform').split(',')[5]) || 0;
            const currentScrollDown = parseFloat($scrollDown.css('transform').split(',')[5]) || 0;

            // Move the divs in opposite directions with incremental values
            if (currentScrollUp <= -containerHeight) {
                // Reset the position when the up scroll reaches -containerHeight
                $scrollUp.css('transform', `translateY(${containerHeight + 400}px)`); // Reset with gap adjustment
            }

            if (currentScrollDown >= containerHeight * 2 + 400) {
                // Reset the position when the down scroll reaches the max height + gap
                $scrollDown.css('transform', `translateY(${containerHeight + 400}px)`); // Reset with gap adjustment
            }

            // Apply the translation
            $scrollUp.css('transform', `translateY(${currentScrollUp - moveSpeed}px)`); // Scroll up slowly
            $scrollDown.css('transform', `translateY(${currentScrollDown + moveSpeed}px)`); // Scroll down slowly
        }, 20); // 20ms interval for smoother scroll
    }

    // Function to stop the scrolling animation
    function stopScroll() {
        clearInterval(interval);
    }

    // Start scrolling on page load
    startScroll();

    // Stop scrolling on hover and resume on mouse leave
    $('.fj_item').hover(
        function () {
            stopScroll(); // Stop scrolling on hover
        },
        function () {
            startScroll(); // Resume scrolling on mouse leave
        }
    );
});
