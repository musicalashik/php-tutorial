<?php
print_r (get_html_translation_table(HTML_ENTITIES));

echo htmlentities("<html>my name is</html>"); // with htmlentities function

echo htmlspecialchars("<html>my name is</html>"); // with htmlspecialchars
?>