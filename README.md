# TERMINAL-SHELL

![TERMINAL-SHELL](https://i.ibb.co/8Dt6BLk/shell.png)

**TERMINAL-SHELL** is a web-based terminal emulator built with PHP, HTML, CSS, and JavaScript, designed to provide a sleek and modern command-line interface in the browser. It supports basic shell commands and includes a nano-like text editor for editing files directly within the interface. The project features a cyberpunk-inspired design with a green-on-black aesthetic, powered by the Roboto Mono font.

## Features

- **Web-Based Terminal**: Execute shell commands directly from your browser.
- **Nano Editor Integration**: Edit files using a built-in nano-like text editor with save and close functionality.
- **Responsive Design**: Adapts to various screen sizes, including mobile devices.
- **Customizable UI**: Cyberpunk-themed interface with a glowing green gradient and smooth animations.
- **Command Output Display**: View command outputs in a formatted, scrollable pre-tag.
- **Security Considerations**: Basic file handling for nano editor (note: use with caution due to `shell_exec`).

## Installation

To set up TERMINAL-SHELL locally, follow these steps:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/INTELEON404/TERMINAL-SHELL.git
   cd TERMINAL-SHELL

    Set Up a Web Server:
        Ensure you have a PHP-enabled web server (e.g., Apache, Nginx) and PHP installed (version 7.4 or higher recommended).
        Place the repository files in your web server's root directory (e.g., /var/www/html for Apache).
    Configure Permissions:
        Ensure the web server user (e.g., www-data) has read/write permissions for the directory where files will be edited by the nano editor.
        Example:
        bash

        chown -R www-data:www-data /path/to/TERMINAL-SHELL
        chmod -R 775 /path/to/TERMINAL-SHELL

    Access the Application:
        Open your browser and navigate to http://localhost/TERMINAL-SHELL (or the appropriate URL based on your server setup).

Usage

    Run Commands:
        Enter shell commands in the input field (e.g., ls, pwd, whoami).
        Press the "▶ চালাও" (Run) button to execute the command.
        View the output in the scrollable output section below.
    Edit Files with Nano:
        Type nano filename.txt to open the nano editor for a specific file.
        Edit the file content in the textarea.
        Click the "💾 Save" button to save changes or the "❌ Close" button to exit the editor.
    Example Commands:
        List files: ls
        Create/edit a file: nano example.txt
        View system info: uname -a

Screenshots
TERMINAL-SHELL Interface
Security Warning
⚠️ Important: The use of shell_exec() in this project allows arbitrary command execution, which is highly dangerous in a production environment. This could lead to severe security vulnerabilities, such as remote code execution. To secure this application:

    Sanitize and validate all user inputs.
    Restrict allowed commands to a predefined safe list.
    Run the application in a sandboxed environment with restricted permissions.
    Consider disabling shell_exec for production use or replacing it with safer alternatives.

Contributing
Contributions are welcome! To contribute:

    Fork the repository.
    Create a new branch (git checkout -b feature/your-feature).
    Make your changes and commit (git commit -m "Add your feature").
    Push to your branch (git push origin feature/your-feature).
    Open a Pull Request.

Please ensure your code follows the existing style and includes appropriate tests.
License
This project is licensed under the MIT License. See the LICENSE file for details.
Acknowledgments

    Built with PHP, HTML, CSS, and JavaScript.
    Uses Roboto Mono font for the terminal aesthetic.
    Created by INTELEON404.

Contact
For questions or feedback, reach out via GitHub Issues or connect with me on X
.
THE INTELEON404
