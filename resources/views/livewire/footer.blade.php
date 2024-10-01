<div>
    <style>
        footer {
            position: fixed;
            bottom: 0;
            border-top: 2px solid var(--grey-color);
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 2em 5em;
        }

        .skip_button,
        .check_button {
            font-size: 1em;
            font-weight: 600;
            padding: 0.8em 2.5em;
            border-radius: var(--border-radius);
            transition: 0s all ease-in-out;
            cursor: pointer;
        }

        .skip_button {
            color: var(--darker-grey-color);
            border: 1px solid var(--grey-color);
            background-color: white;
            box-shadow: 0px 3px 0px 0px var(--grey-color);
        }

        .skip_button:hover {
            background-color: rgba(143, 157, 173, 0.2);
        }

        .check_button {
            color: white;
            border: 1px solid #2ec748;
            background-color: #2ec748;
            box-shadow: 0px 3px 0px 0px #27aa3d;
        }

        .check_button:hover {
            background-color: #33db4f;
        }

        .skip_button:active,
        .check_button:active {
            transform: translateY(2px);
            box-shadow: none;
        }
    </style>
    {{-- Stop trying to control. --}}
    <footer>
        <div class="skip_button">SKIP</div>
        <div class="check_button">CHECK</div>
    </footer>
</div>
