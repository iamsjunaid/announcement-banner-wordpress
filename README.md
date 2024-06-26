# Announcement Banner Plugin

This plugin allows you to add an announcement banner to your WordPress website to promote deals, announcements, etc. The banner text and button link can be customized through the WordPress admin settings.

## Installation

1. **Download the Plugin:**
   - Download the ZIP file of the plugin from the repository or source.

2. **Upload the Plugin:**
   - In your WordPress admin dashboard, navigate to `Plugins > Add New`.
   - Click on the `Upload Plugin` button.
   - Choose the downloaded ZIP file and click `Install Now`.

3. **Activate the Plugin:**
   - After the plugin is installed, click the `Activate Plugin` button to activate it.

## Usage

1. **Navigate to the Settings Page:**
   - In the WordPress admin dashboard, go to `Settings > Announcement Banner`.

2. **Configure the Banner:**
   - Enter the desired text for the banner in the "Banner Text" field.
   - Enter the URL for the button link in the "Button Link" field.
   - Click the `Save Changes` button to save your settings.

3. **View the Banner:**
   - Visit the front end of your website to see the announcement banner displayed at the top of the page.

## Customization

The banner's appearance can be customized by editing the CSS file located at `css/style.css`. You can adjust the styles to match your website's design.

## File Structure

The plugin's file structure is as follows:

```
announcement-banner/
│
├── css/
│   └── style.css
├── includes/
│   ├── admin-settings.php
│   └── display-banner.php
├── js/
│   └── script.js (optional)
└── announcement-banner.php
```

- **announcement-banner.php:** The main plugin file that initializes the plugin and includes necessary files.
- **css/style.css:** The CSS file for styling the announcement banner.
- **includes/admin-settings.php:** Contains the code for the settings page in the WordPress admin.
- **includes/display-banner.php:** Contains the code to display the banner on the front end.
- **js/script.js:** Optional JavaScript file for additional functionality.

## Credits

- Developed by [Your Name]
- Inspired by existing plugins like [Simple Banner](https://wordpress.org/plugins/simple-banner/), [Foobar Notifications Lite](https://wordpress.org/plugins/foobar-notifications-lite/), and [myStickymenu](https://wordpress.org/plugins/mystickymenu/).

## License

This plugin is licensed under the [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html).