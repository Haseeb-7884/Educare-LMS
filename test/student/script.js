document.addEventListener("DOMContentLoaded", function() {
    const sections = [
      { title: "Introduction", content: "<iframe width='560' height='315' src='https://www.youtube.com/embed/VIDEO_ID' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe><p>Introduction to the course...</p>" },
      // Add more sections as needed
    ];
  
    const accordion = document.querySelector('.accordion');
  
    sections.forEach(section => {
      const accordionItem = document.createElement('div');
      accordionItem.classList.add('accordion-item');
  
      const accordionTitle = document.createElement('div');
      accordionTitle.classList.add('accordion-title');
      accordionTitle.textContent = section.title;
  
      const accordionContent = document.createElement('div');
      accordionContent.classList.add('accordion-content');
      accordionContent.innerHTML = section.content;
  
      accordionItem.appendChild(accordionTitle);
      accordionItem.appendChild(accordionContent);
      accordion.appendChild(accordionItem);
  
      accordionTitle.addEventListener('click', function() {
        accordionContent.classList.toggle('active');
      });
    });
  });
  