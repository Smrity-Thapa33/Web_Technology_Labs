<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

<html>
<body>

<h2>Book List</h2>

<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>Title</th>
        <th>Location</th>
        <th>Publisher</th>
        <th>Year</th>
    </tr>

    <xsl:for-each select="Books/Book">
        <tr>
            <td><xsl:value-of select="Title"/></td>
            <td><xsl:value-of select="Location"/></td>
            <td><xsl:value-of select="Publisher"/></td>
            <td><xsl:value-of select="Year"/></td>
        </tr>
    </xsl:for-each>

</table>

</body>
</html>

</xsl:template>

</xsl:stylesheet>