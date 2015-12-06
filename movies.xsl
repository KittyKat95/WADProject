<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
  <html>
  <body  style="font-family:Arial;font-size:12pt;background-color:#EEEEEE">
    
     <table border="1">
      <tr bgcolor="#9acd32">
        <th style="text-align:left">Title</th>
        <th style="text-align:left">Rank</th>
        <th style="text-align:left">Year</th>
        <th style="text-align:left">Rating</th>
      </tr>
      
    <xsl:for-each select="imdb/movies">
    
    
      <tr>
      <td> <xsl:value-of select="title"/></td>
  
        <td><xsl:value-of select="rank"/></td>
     
        <td><xsl:value-of select="year"/></td>
      
      <td><xsl:value-of select="rating"/></td>
      </tr>
      
     
       </xsl:for-each>
    </table>
  
      
    <xsl:value-of select="link"/>
  
      

  </body>
  </html>
</xsl:template>

</xsl:stylesheet>