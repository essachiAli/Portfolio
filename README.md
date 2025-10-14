# Portfolio
## 🧩 How to Use PlantUML in VS Code

1. **Install Java**  
   PlantUML requires Java to run.  
   Download and install Java (JDK 11 or later) from:  
   👉 [https://adoptium.net](https://adoptium.net)  
   After installation, verify that Java is installed by running:  
   ```bash
   java -version
   ```

2. **Download PlantUML**  
   Download the PlantUML `.jar` file from the official website:  
   👉 [https://plantuml.com/download](https://plantuml.com/download)  
   Example file name:  
   ```
   plantuml.jar
   ```
   You can place it in a folder such as:  
   ```
   tools/plantuml/plantuml.jar
   ```

3. **Install PlantUML Extension in VS Code**  
   Open VS Code → go to Extensions → search for **PlantUML (by jebbs)** → click **Install**.  
   Or install it using this command:  
   ```bash
   ext install jebbs.plantuml
   ```

4. **Create a PlantUML File**  
   Create a file with the extension `.puml` or `.plantuml` (for example `diagram.puml`) and paste your diagram code inside.

5. **Preview the Diagram in VS Code**  
   - Right-click inside the `.puml` file → select **Preview Current Diagram**, or  
   - Use the shortcut `Alt + D`, or  
   - Press `Ctrl + Shift + P`, type `PlantUML: Preview Diagram`, and choose **PlantUML: Preview Diagram Side by Side**.  
   The diagram will appear directly in VS Code.

6. **Generate an Image (Optional)**  
   You can generate a `.png` or `.svg` using the `.jar` file from the terminal:  
   ```bash
   java -jar plantuml.jar diagram.puml
   ```
   This creates `diagram.png` in the same folder.

7. **Example Command for README**  
   ```bash
   # Generate a diagram from PlantUML file
   java -jar tools/plantuml/plantuml.jar diagrams/portfolio-usecase.puml
   ```

🧠 **Tip:** You can organize all your `.puml` files inside a `diagrams/` folder and keep generated `.png` files alongside them for documentation.
