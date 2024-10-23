
    document.addEventListener("DOMContentLoaded", function () {
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const courses = document.querySelectorAll('.row.courses .col');
        const numCourses = courses.length;
        const coursesToShow = 3; // Number of courses to show at once
        let currentIndex = 0;

        function updateVisibility() {
            courses.forEach(function (course, index) {
                if (index >= currentIndex && index < currentIndex + coursesToShow) {
                    course.style.display = 'block';
                } else {
                    course.style.display = 'none';
                }
            });

            // Update visibility of navigation buttons
            prevBtn.style.display = currentIndex === 0 ? 'none' : 'block';
            nextBtn.style.display = currentIndex >= numCourses - coursesToShow ? 'none' : 'block';
        }

        // Initially show the first three courses
        updateVisibility();

        nextBtn.addEventListener('click', function () {
            if (currentIndex < numCourses - coursesToShow) {
                currentIndex++;
                updateVisibility();
            }
        });

        prevBtn.addEventListener('click', function () {
            if (currentIndex > 0) {
                currentIndex--;
                updateVisibility();
            }
        });
    });
