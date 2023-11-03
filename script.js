
let http = new XMLHttpRequest()
http.open('get', 'data.json', true)

http.send()


http.onload = function renderData(){
    let data = JSON.parse(this.responseText)
        // const wedding = new ScreenOne()
        wedding.creat()
        wedding.append()
}

const main = document.querySelector('main')

class ScreenOne{
    elem = document.createElement('section')

    constructor(){

    }

    creat(){
        this.elem.classList.add('screen-one')
        
        this.elem.innerHTML = `
            <div class="wedding-one">
                <h1>Дорогие друзья, родные и близкие!</h1>
                <p>В зимний день 30 декабря 2023 года, мы, Юлия и Евгений приглашаем разделить с нами знаменательное событие - рождение нашей семьи.</p>

            </div>
        `
    }

    append(){
        main.append(this.elem)
    }
}