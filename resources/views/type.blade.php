<style>
    body {
        font-family: sans-serif;
        height: 100vh;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    h1 {
        font-weight: 400;
        text-align: center;
    }

    .button-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 700px;
        margin: 0 auto;
    }

    .button {
        min-width: 100%;
        border-radius: 16px;
        border: 2px solid #e5e5e5;
        border-bottom: 6px solid #e5e5e5;
        margin: 10px;
        transition: all 0.1s;
        display: inline-flex;
        padding: 12px 16px;
    }

    .button:hover {
        background-color: #ddf4ff;
        border-color: #1cb0f6;
    }

    .button:active {
        border-bottom: 2px solid #1cb0f6;
    }

    .answer-number {
        border: 2px solid #e5e5e5;
        border-radius: 8px;
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .answer-choice {
        width: 100%;
        text-align: center;
        font-size: 19px;
        color: #4b4b4b;
    }
</style>


<div class="button-container">
    <a href="{{ url('/exercise/create/blanks') }}" class="button">
        <p class="answer-number">1</p>
        <p class="answer-choice">Fill in the blanks.</p>
    </a>
    <a href="{{ url('/exercise/create/picture') }}" class="button">
        <p class="answer-number">2</p>
        <p class="answer-choice">Name the picture</p>
    </a>
    <a href="{{ url('/exercise/create/listen') }}" class="button">
        <p class="answer-number">3</p>
        <p class="answer-choice">Listen and write</p>
    </a>
</div>
