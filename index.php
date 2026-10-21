<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>FORM</title>

    <style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    margin: 0;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #333;
}

h1 {
    color: #ffffff;
    font-size: 1.8rem;
    margin-bottom: 5px;
    text-align: center;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

#messaggio{
    text-align: center;
    color: #555;
    font-size: 0.95rem;
    margin-bottom: 20px;
    font-weight: 500
}

form {
    background: #ffffff;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 380px;
    box-sizing: border-box;
}

input{
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 0.95rem;
    box-sizing: border-box;
    transition: all 0.3s ease;
    background-color: #f9f9f9;
}

input:focus {
    border-color: #667eea;
    background-color: #fff;
    outline: none;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.15);
}

button {
    width: 100%;
    padding: 12px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: transform 0.2s ease, opacity 0.3s ease;
    box-shadow: 0 4px 10px rgba(102, 126, 234, 0.3);
}

button:hover {
    opacity: 0.95;
    transform: translateY(-1px);
}

button:active {
    transform: translateY(1px);
}
    </style>

</head>
<body>
    <h1>FORM</h1>

    <form>
        <div id="messaggio">
            <?php   
            echo "Ciao, inserisci le tue credenziali!";
            ?>
        </div>


        <input type="text" id="nome" placeholder="nome">
        <br>
        <input type="text" id="cognome" placeholder="cognome">
        <br>
        <input type="email" id="email" placeholder="abc@gmail.com">
        <br>
        <input type="password" id="password" placeholder="***">
        <br>
        <button>INVIA</button>

    </form>

</body>
</html> 
