<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <meta name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
      
    </style>

</head>
<body>
  <!-- <div class="container bg-secondary bg-gradient mt-4 bac">
    <div class="row">
      <div class="col text-center mt-4">
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBhIIBwgWFRMVGSAVFRgVFBsYFhkgFh0XGBkkHx4aHS0gHSYxIBoWIT0tJTUrMTA6IyszRDM4NzQxLjABCgoKDg0OFQ8QFy0fHx4tNy0tKy03LS0tNzcrLSstKy0uKy0tLS0tLTAvLS4uLS03Li0rLi0uLSstKy0tLS0vLf/AABEIAOEA4QMBEQACEQEDEQH/xAAaAAEBAQEAAwAAAAAAAAAAAAAABQQDAQIG/8QAPRABAAEDAgMDBwkHBQEAAAAAAAECAwQFERIhMRNBURUiMlJhcYEGFFWRkpOh4vBCQ2JygsHhIzNTsbIW/8QAGQEBAQADAQAAAAAAAAAAAAAAAAMCBAUB/8QANBEBAAIBAQYDBAoDAQEAAAAAAAECAxEEEiExUWFBcZEFE4GxFBUyUlOSocHh8CJC0TMj/9oADAMBAAIRAxEAPwD4hZIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABowsHLz7vZ4WPVXPfwxyj3z0j4sq0m08I1QzbTiwxrktER3/aOcqH/zWpRyqi3E+rN6ji/9M/c27NP622fw3pjrpOnyY8/S8/T43zMWqmJ6T1p+1TvDG1LV5w2cG24M/DHeJnpyn0nixsG0AAAAAAAAAAAAAAAAAAAAAAAA16TgzqOoUYsVbRPOqr1aaY3qn6oZ0rvTENba9ojBinJprMco6zPCI9WjU9WqvU/NMDe3j08qaKeXF7a++qZ68/8ALK+TwrwhDZdhiv8A9c3+WSecz4do6RCXtHSISdBu03VMnTqtrVXFbnlVbq526onrExPL4wpS818ujU2nYsWeNZjS0crRwmJ8/wBnTWsOzj3aMjC37G9Tx29+tPdVTPunk9yViJiY5Sw2HPe9bY8v26TpPfpPxhOSbwAAAAAAAAAAAAAAAAAAAAAACtoHK3l1x1jGr2+M0RK2Llae0uZ7R4zgieU3j5SkoumAAr5PnfJWxM/s3a6Y90xTVP4rT/5x5y5mLht+WI8axM+cTMfJIRdMAAAAAAAAAAAAAAAAAAAAAABY0yKcfQ8nM5zNURj7R0pi5501T9mIj9bWpwpafg5e165NqwYuUV1tr104aR+6Oi6gACxZ4cn5LXKJiYmxcprie6rtfM298bbrRxxzHSfm5d9cW30mOMZKzHeN3jr8ddEdF1AAAAAAAAAAAAAAAAAAAAAAAFX5P3bVdy5puTVtRkRFG/q1xO9ufr5fFXFMazWeU/Pwc72jS0RXaKRrOOddOsTwmPRNv2bmPfqsXqdqqZmmY9scpTmJidJb2PJXJSt6zrExrD0eMwFnVI8m6Xb0r95VPbXvZMxtRT8I5z7Vr/41injzlytlmdoz22n/AFiN2vfjxn4zwjsjIuqAAAAAAAAAAAAAAAAAAAAAAAAtantqml06v0uUzFq/HrTt5lce2YjaVr/5V3/HlLlbJrs2e2y/621tXtGvGPhPJFRdVV0GzZom5qeXG9GPw1cPr1VTMW49kbxvKuKIjW08oc72hkvO5s+PhOTWNekR9qfPTknZN+5k5FV+/VvVVM1TPtlhMzMzMt3FiripWlY0isaQ5sVAAAAAAAAAAAAAAAAAAAAAAAG/TNKvZ0Teqri3ap9O7X6MeyPWn2QpSk248o6tPadtphmKRG9eeVY5z/yO7rqOoY/zXydpdqabMTxTVV6dyqOW8+EeER/h7e8abteXzT2bZcm/9IzzreY0iI5RHSOs9ZS0nQbtL1CMLjtZFiLlq5tFyieUzwzvExPdMbzP6iYpS+7rExrEtPa9lnNu3pbdvXXdnz5xMeMT4t935OTctU5uDmUdhV0rvT2c0+yd45++nlLOcOsaxPDvwadPau7M4ctJ36+FeOveOnl4OPknT9+Hy9a3/krmn7W2zzcr96P1V+nZ+f0e2nnGvo5ZWiZdixOTami7bjrXZq46Y9/fH1PJxTEaxxjspi9o4r293bWlulo0mfLwn1TUm+AAAAAAAAAAAAAAAAAAA16fpuXqNyacSzvEelVPKin31Tyj/tnSk25Q1to2vFgiJvOkzyjnM+Uc27s9G03/AHq/nNz1aJ4bMT7autfw5SppSvPjP6NPe2vafsx7qvWeNp+HKPmxajqeTqNUdvVEU0+hRRHDbp91P6lO95t5NvZtjx4ImaxrM87TxmfOf7DGwbQCrpWNj2cWrVdQt8VFM8Nuif3lfXn/AAxHOfHp4xNaRERNrcvDvLm7XlvkyV2bDOkzGtrdI7d55R6seoZ+TqOR2+Zd4p7o7qY8KY7oYWvNp1lt7Ps2LBXdxxp16z3mfFmYru+Fl5OBfjJxLk0zHLeOk+ye6fdLKtprOsIZ8GLPWceSIn+846eahqdmxnYPlbCtRRz4b9uOlNU9Ko8KavwnkpeItG/Hxaey5L4cv0XLOvDWtp5zEc4nvHySEXTAAAAAAAAAAAAAAAAAAWddu3LOFjYFFUxR2NFyqmOUTVXxTMz4z06r5JmIrWOWjlbBjrkyZ81o1nemInpEaRpHRGQdUAeg8FfX97NjFwqY2iizTX/Vd3qr/stl4RWOkfNzPZ0b98+aec2mPhXhD0xtBzcnAnKppiN44qKJnz7kR6U0x1mI5e95GG0xr/ZZZPaWGmWMeuvhNvCJnlEz3/Rm0vT7mo5HZ0VRTTTHFcrn0aKY6zP65/WxpSbTp4L7VtVcFN7TWZ4ViOcz0h9Di38XJxLlirHinAtxtx1Rtcmvuqpnvrnw6bdfBeJiYmNP8Y9df+uLkx5MeSl4tM57TrpHKI8YnpEdeqX8mdruZcwZnzb1qujn40xNdM++Nk8XOa9Yl0facTXHTN40tE/CZ0mPKdUaJ3jdF03kAAAAAAAAAAAAAAAAHirfbkD6bXMCzn5/a4+rYsURTTRTFV7adqaYjuie/ds5KRaddY083B2Har4MW7fDeZmZmdI4cZmesMHkSPpjE+//ACsPdd49W59Yz+Bk/L/J5Ej6YxPv/wAp7rvHqfWM/gZPy/yeRI+mMT7/APKe67x6n1jP4GT8v8nkSPpjE+//ACnuu8ep9Yz+Bk/L/Lt8qLHm49+LtNcTZi3NVFXFRNVrzatp+MPc0fZnXXh8kvZWXWc1JrNZi0zpMaTpbjHB2tZFeuVUXrN3gzbUebz2i7FO88t+VNXXl0nn3ejlE7+kxOlo/VK+GNj3q2rvYbTx61mevjMd+cOtV+rVbFU37MY2PTPFkzTG03LnhETz33/Z57dZ3nY13tdY3Y8e8pRjjZrV3Le9yWjSkTyiOs9u/ijarqM51dNu1b4LNHK3bjpTHjPjVPfP6mV773COERyh1dk2SMMTa063t9q3XtHSI8Iavkz/AKOTdz6o5WbVVX9VUTRTHx3lli5zbpCHtOd6lMMc72iPhE6zPw0RojaNkXTeQAAAAAAAAAAAAAAAAAAAAAAVdKyse5jVaXqNfDbrnior69lXHKJ/lmOU/wBucq0tExNbcp/SXN2vDkreu04Y1tWNJjrHTzjnDLn4GXpeRFORTNM9aKqZ82rbnE01R17p8YY2pNZbGDacW00ndnXwmJ5x2mHvqerZuqRRGZd3iiNoiI2iZ76p8Znxe3yTbTV5s2xYdnm0440mf7pHaHHAwcnUL/Y4dqap7/CPbM9Ih5Wk2nhCm0bTi2em9knT5z5R4t2p5GPiYUaVp93ijfivXI6XKo6RH8MfjPP353mIjdr8Z6tTZMd8uWdpzRpOmla9I6z3nx7JKLpAAAAAAAAAAAAAAAAAAAAAAAAN+DrGbhWuwt3Iqtz1t3KYrtz8J6fDZSuS1Y7dGnn2DDmtvzG7b71Z0n1j99WjyzjzG86Jj7/y1cP2eLZl7yPuwh9AycvpF9PONfXRwzNazcux834qaLf/AB2qYoo+MRzn47sbZbTGnKOy2D2fhxW39Jtb71p1n9eSem3QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHgAAAAAAAAAAAAAAAAAAAAAAAAAAAAH/9k=" alt="">  
        <h2 >
            Sing in to your account
        </h2>
      </div>
      <div class="col-6 mt-3">
        <form>
          <fieldset>
            <div class="mb-3">
              <label for="" class="form-label">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Email address</label>
              <input type="email" class="form-control">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Password</label>
              <input type="password" class="form-control">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" class="form-label">
              <label for="" class="form-chech-label">Check terms</label>
            </div>
            <button type="submit" class="mb-3 btn btn-primary">Submit</button>
          </fieldset>
        </form>
      </div>
    </div>
  </div> -->
  <!-- login del profe -->
  <div class="container">
    <section>
      <div class="row justify-content-md-center">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="text-center">
            <h1>Acceso al panel</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas corrupti, officia ex dolore ad veniam excepturi distinctio! Perspiciatis expedita aliquid vitae enim labore. Repudiandae cupiditate eos quod labore laborum! Magni.</p>
          </div>
          <form method="get" action="products" class="form">
            <label for="">Correo electronico</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input type="text" class="form-control" placeholder="username@email.com" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <label for="">Password</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">#</span>
              <input type="text" class="form-control" placeholder="*******" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <button type="submit" class="btn btn-primary col-12 mb-3">
              Acceder
            </button>
          </form>
        </div>
      </div>
    </section>
  </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>