import SwaggerUI from 'swagger-ui';

SwaggerUI({
  dom_id: '#openapi',
  url: "/openapi.json",
  defaultModelsExpandDepth: -1,
  docExpansion: 'none'
});
