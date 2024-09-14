<!DOCTYPE html>
<html lang="en" style="height: 100%">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>

    <style>
      * {
        padding: 0;
        margin: 0;
      }

      body {
        background-color: #f8f7ff;
        height: 100%;
        padding-block: 5%;
      }

      main {
        margin: auto;
        height: 30rem;
        width: 60%;
        background-color: #b8b8ff;
        border-radius: 1rem;
        padding-block: 2rem;
      }

      h1 {
        text-align: center;
        color: #4a34c8;
        padding-block: 2rem;
        font-size: 2.5rem;
      }

      .form-title {
        margin: auto;
      }

      input[type="radio"] {
        color: white;
      }

      .flex-field {
        display: grid;
        grid-template-columns: 25% 75%;
        justify-content: flex-end;
        align-items: center;
        gap: 10px;
        padding-inline: 1.3rem;
        margin-bottom: 2rem;
      }

      .grid-input {
        flex-grow: 1;
        font-size: 12px;
        padding-block: 6px;
        padding-inline: 4px;
        box-sizing: border-box;
        border-color: beige;
        background-color: transparent;
        border-color: transparent transparent black transparent;
      }

      .grid-label {
        text-align: right;
      }

      .grid-select {
        font-size: 12px;
        padding-block: 6px 4px;
        line-height: 4px;
      }

      .checkbox-form {
        padding-inline: 4rem;
        margin-bottom: 2.5rem;
      }

      .form-button {
        background-color: #f8f7ff;
        color: #9381ff;
        border: 0px;
        border-radius: 4px;
        padding: 1rem 2.4rem;
      }
    </style>
  </head>
  <body>
    <form action="submit.php" method="POST">
      <input type="text" name="firstname" />
      <input type="text" name="lastname" />
      <input type="email" name="email" />
      <input type="password" name="password" />
      <input type="date" name="date" />


      <input type="radio" name="year-level" id="" value = "1"> First Year </input>
      <input type="radio" name="year-level" id="" value = "2"> Second Year </input>
      <input type="radio" name="year-level" id="" value = "3">  Third Year </input>

      <button type="submit">Submit</button>
    </form>
  </body>
</html>
