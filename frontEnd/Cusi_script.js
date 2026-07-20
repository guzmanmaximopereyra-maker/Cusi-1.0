  async function llamaA(url) {
            try {
                const response = await fetch(url, {
                    method: 'POST' 
                });

                if (!response.ok) throw new Error('Error en la petición');

             
                document.getElementById("content").innerHTML = await response.text();

            } catch (error) {
                console.error('Hubo un error:', error);
            }    
        }  //php a pelo