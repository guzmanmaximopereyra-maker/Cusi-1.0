  async function llamaA(url) {
            try {
                const response = await fetch(url, {
                    method: 'POST' // Mantenemos el método POST como me pediste
                });

                if (!response.ok) throw new Error('Error en la petición');

                // MOSTRAR EN EL DIV: Buscamos el div por su ID e inyectamos el texto
                document.getElementById("content").innerHTML = await response.text();

            } catch (error) {
                console.error('Hubo un error:', error);
            }    
        }