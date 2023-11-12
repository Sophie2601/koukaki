/*ANIMATION TITRES*/

/*Animation titres Story et Studio Koukaki*/
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
  const lineUp = entry.target.querySelector('h2 span');
    if (entry.isIntersecting) {
      lineUp.classList.add('anim-lineUp');
      return;
  }
    lineUp.classList.remove('anim-lineUp');
});

});

observer.observe(document.querySelector('.story'));
observer.observe(document.querySelector('#studio'));

/*Animation deuxième partie titre Studio Koukaki*/
const observer2 = new IntersectionObserver(entries => {
  entries.forEach(entry => {
  const lineUp = entry.target.querySelector('.titlekoukaki');
    if (entry.isIntersecting) {
      lineUp.classList.add('anim-lineUp2');
      return;
  }
    lineUp.classList.remove('anim-lineUp2');
});

});

observer2.observe(document.querySelector('#studio'));


/*Animation titres Le lieu et Les personnages*/
const observer3 = new IntersectionObserver(entries => {
  entries.forEach(entry => {
  const lineUp = entry.target.querySelector('h3 span');
    if (entry.isIntersecting) {
      lineUp.classList.add('anim-lineUp');
      return;
  }
    lineUp.classList.remove('anim-lineUp');
});

});

observer3.observe(document.querySelector('.main-character'));
observer3.observe(document.querySelector('#place'));


/*PARALLAX TITRE VIDEO*/

var video = document.getElementsByClassName('video-oscars');
new simpleParallax(video, {
  orientation: 'left',
	scale: 1.2,
});


/*ANIMATION NUAGES*/

const bigcloud= document.querySelector('.bigcloud')
const littlecloud= document.querySelector('.littlecloud')
window.addEventListener("scroll", () => {
  let scrollValue = window.scrollY;
  let translateValue = scrollValue * 0.25; 

  bigcloud.style.transform = `translateX(-${translateValue}px)`;
  littlecloud.style.transform = `translateX(-${translateValue}px)`;
});