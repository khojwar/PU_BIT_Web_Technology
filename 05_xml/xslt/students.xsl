<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">

    <html>
        <body>
            <table border="1">
                <tr>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>nickname</th>
                    <th>marks</th>
                </tr>

                        
                <xsl:for-each select="class/student">
                    <tr>
                        <td> <xsl:value-of select = "firstname"/>  </td>
                        <td> <xsl:value-of select = "lastname"/> </td>
                        <td><xsl:value-of select = "nickname"/> </td>
                        <td><xsl:value-of select = "mark"/> </td>
                    </tr>

                </xsl:for-each>
            </table>
        </body>
    </html>

    </xsl:template>
</xsl:stylesheet>