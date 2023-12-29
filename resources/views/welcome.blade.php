<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>匿名チャットアプリ</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000;
            color: #fff;
        }

        .chat-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #111;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            overflow: hidden;
        }

        .chat-header {
            background-color: #4CAF50;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .chat-messages {
            padding: 15px;
            overflow-y: scroll;
            max-height: 300px;
        }

        .message {
            margin-bottom: 15px;
        }

        .message .user {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .message .text {
            padding: 10px;
            background-color: #333;
            border-radius: 5px;
        }

        .chat-input {
            padding: 15px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            border-top: 1px solid #444;
        }

        .chat-input input {
            padding: 10px;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            margin-bottom: 10px;
        }

        .chat-input button {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

<div class="chat-container">
    <div class="chat-header">匿名チャット<span id="current-username"></span></div>
        <div id="messages_data"></div>
    <div class="chat-input">
        <form action="{{ route('send') }}" method="POST">
            @csrf
            <label for="message_box">Message</label>
            <input type="text" id="message_box" name="message_box" placeholder="メッセージを入力..." required>
            <button type="submit">送信</button>
        </form>
    </div>
</div>

<script src="{{ asset('js/messages.js') }}"></script>
</body>
</html>
