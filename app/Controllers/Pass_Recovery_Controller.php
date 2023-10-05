<?php namespace App\Controllers;

use App\Models\usuario_Model;
use CodeIgniter\Controller;

class Pass_Recovery_Controller extends Controller
{
    public function enviarRecuperacion()
    {
        $email = $this->request->getPost('email');

        $model = new usuario_Model();

        $user = $model->where('email', $email)->first();

        if ($user) {
            // Genera un token único
            $token = bin2hex(random_bytes(50));

            // Guarda el token en la base de datos asociado al usuario
            $model->save([
                'id_usuario' => $user['id_usuario'],
                'reset_token' => $token,
            ]);

            // Enviar el correo electrónico con el enlace de recuperación
            $message = "Haz clic en el siguiente enlace para restablecer tu contraseña: " .
                        "<a href='<?php echo base_url('/recuperar-contraseña/$token');?>">Restablecer contraseña</a>";

            //Utiliza el servicio de correo electrónico para enviar el mensaje
            //Asegúrate de configurar correctamente el servicio de correo electrónico
            $emailService = \Config\Services::email();
            $emailService->setTo($email);
            $emailService->setSubject('Recuperación de contraseña');
            $emailService->setMessage($message);

            if ($emailService->send()) {
                return redirect()->to('/')->with('msg', 'Se ha enviado un correo electrónico con instrucciones para restablecer tu contraseña.');
            } else {
                return redirect()->to('/recuperar-contraseña')->with('msg', 'No se pudo enviar el correo electrónico. Por favor, inténtalo de nuevo.');
            }
        } else {
            return redirect()->to('/recuperar-contraseña')->with('msg', 'No se encontró ninguna cuenta con ese correo electrónico.');
        }
    }
}