<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">

        <html>
        <body>

        <h2>List of Students</h2>

        <xsl:for-each select="Students/Student">
            <p>
                Name: <xsl:value-of select="Name"/>,
                Address: <xsl:value-of select="Address"/>,
                Roll no: <xsl:value-of select="RollNo"/>
            </p>
        </xsl:for-each>

        </body>
        </html>

    </xsl:template>

</xsl:stylesheet>