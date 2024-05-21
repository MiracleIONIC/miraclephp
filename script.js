const body = document.querySelector('body');


body.addEventListener('click', () => {

  
  const red = Math.floor(Math.random() * 256);
  const green = Math.floor(Math.random() * 256);
  const blue = Math.floor(Math.random() * 256);

  const newColor = `rgb(${red}, ${green}, ${blue})`;


  body.style.backgroundColor = newColor;
});
