# TERMINAL-SHELL

<div align="center">
  <img src="https://i.ibb.co/8Dt6BLk/shell.png" alt="logo" />
</div>


**TERMINAL-SHELL** is a sleek, web-based terminal emulator built with PHP, HTML, CSS, and JavaScript. Designed with a cyberpunk-inspired green-on-black aesthetic, it offers a browser-based command-line interface with a nano-like text editor for file manipulation. Powered by the Roboto Mono font, this project delivers a modern and immersive terminal experience.

📌 **Repository**: [github.com/INTELEON404/TERMINAL-SHELL](https://github.com/INTELEON404/TERMINAL-SHELL)

## 🚀 Features

- **Web-Based Command Execution**: Run shell commands directly in your browser.
- **Nano-Style Editor**: Edit files with a built-in text editor, featuring save and close functionality.
- **Responsive Design**: Optimized for desktops and mobile devices.
- **Cyberpunk Aesthetic**: Vibrant green gradients, glowing effects, and smooth animations.
- **Command Output Display**: View results in a scrollable, formatted output panel.
- **Customizable Interface**: Tailored with the Roboto Mono font for a true terminal feel.

## 🛠️ Installation

To run TERMINAL-SHELL locally:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/INTELEON404/TERMINAL-SHELL.git
   cd TERMINAL-SHELL

    Set Up a Web Server:
        Ensure PHP (7.4+) and a web server (e.g., Apache, Nginx) are installed.
        Copy the repository files to your web server's root directory (e.g., /var/www/html).
    Configure Permissions:
        Grant read/write permissions to the web server user for file editing:
        bash

        chown -R www-data:www-data /path/to/TERMINAL-SHELL
        chmod -R 775 /path/to/TERMINAL-SHELL

    Access the Terminal:
        Navigate to http://localhost/TERMINAL-SHELL in your browser.

📖 Usage

    Execute Commands:
        Enter shell commands (e.g., ls, pwd, whoami) in the input field.
        Click the "▶ চালাও" (Run) button to view the output in the scrollable panel.
    Edit Files with Nano:
        Type nano filename.txt to open the nano editor.
        Modify the file content in the textarea.
        Use the "💾 Save" button to save changes or "❌ Close" to exit.
    Example Commands:
    bash

    ls           # List directory contents
    nano test.txt # Open nano editor for test.txt
    uname -a     # Display system information

📸 Screenshots
Terminal Interface
⚠️ Security Notice
⚠️ Critical: The use of shell_exec() allows arbitrary command execution, posing significant security risks (e.g., remote code execution). For safe deployment:

    Sanitize Inputs: Validate and filter all user inputs.
    Restrict Commands: Use a whitelist of allowed commands.
    Sandbox Environment: Run the application in a restricted environment.
    Disable shell_exec: Consider safer alternatives for production use.

This project is for educational purposes and should not be deployed publicly without proper security measures.
🤝 Contributing
We welcome contributions! To get started:

    Fork the repository.
    Create a feature branch (git checkout -b feature/your-feature).
    Commit your changes (git commit -m "Add your feature").
    Push to the branch (git push origin feature/your-feature).
    Open a Pull Request.

Please adhere to the existing code style and include tests where applicable.
📄 License
This project is licensed under the MIT License (LICENSE).
🙌 Acknowledgments

    Built with PHP, HTML, CSS, and JavaScript.
    Styled with Roboto Mono for an authentic terminal vibe.
    Created by INTELEON404.

📬 Contact
For questions, bug reports, or feedback:

    Open an issue on GitHub.
    Connect with me on X
    .

