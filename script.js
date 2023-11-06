function timer() {
    const date = new Date(2023, 11, 30, 12)
    const day = document.querySelector('.day')
    const hour = document.querySelector('.hour')
    const min = document.querySelector('.min')
    const sec = document.querySelector('.sec')
    var nowDate = new Date();
    var achiveDate = new Date(2023, 11, 30, 12,0,0); //Задаем дату, к которой будет осуществляться обратный отсчет
    var result = (achiveDate - nowDate)+1000;
    var seconds = Math.floor((result/1000)%60);
    var minutes = Math.floor((result/1000/60)%60);
    var hours = Math.floor((result/1000/60/60)%24);
    var days = Math.floor(result/1000/60/60/24);
    if (seconds < 10) seconds = '0' + seconds;
    if (minutes < 10) minutes = '0' + minutes;
    if (hours < 10) hours = '0' + hours;
    day.innerHTML = days
    hour.innerHTML = hours
    min.innerHTML = minutes
    sec.innerHTML = seconds
    setTimeout(timer, 1000);
}
timer();

function onEntry(entry) {
    entry.forEach(change => {
      if (change.isIntersecting) {
    //    change.target.classList.add('element-show');
    console.log(change.target)
      }
    });
  }
  
  let options = {threshold: [0.5]};
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('section');
  console.log(elements)
  for (let elm of elements) {
    observer.observe(elm);
  }