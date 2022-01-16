<?php

namespace App\Models;

use CodeIgniter\Model;

class ResponseModel extends Model
{
    protected $table      = 'response';
    protected $useTimestamps = true;
    protected $allowedFields = ['questionID', 'kodeInstrumen', 'instrumenID', 'slug', 'jawaban', 'responden', 'userID', 'uniqueID', 'created_at', 'updated_at'];

    public function getResponse($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('id', 'desc')
                ->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getTotalResponse($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('id', 'desc')
                ->groupBy('uniqueID')
                ->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function getResponseByInstrumen()
    {
        return $this
            ->join('instrumen', 'instrumen.id = response.instrumenID')
            ->groupBy('kodeCategory')
            ->findAll();
    }
    public function getResponseActiveShowGrafik()
    {
        return $this
            ->join('instrumen', 'instrumen.id = response.instrumenID')
            ->where('instrumen.tampil_grafik', '1')
            ->groupBy('kodeCategory')
            ->findAll();
    }
    public function getResponseButir($id)
    {
        return $this
            ->join('questions', 'questions.instrumenID = response.instrumenID')
            ->where('response.instrumenID', $id)
            ->groupBy('questions.id')
            ->findAll();
    }
    public function getResponseJawaban($id)
    {
        return $this
            ->join('questions', 'questions.id = response.questionID')
            ->where('response.instrumenID', $id)
            ->groupBy('response.id')
            ->findAll();
    }
    public function getResponseJawabanLagi($id)
    {
        return $this
            ->join('questions', 'questions.id = response.questionID')
            ->where('response.instrumenID', $id)
            ->groupBy('response.questionID')
            ->findAll();
    }
    public function getJumlahRespondenIns($instrumenID)
    {
        return $this
            ->select('userID')
            ->where('instrumenID', $instrumenID)
            ->groupBy('userID')
            ->countAllResults();
    }
    public function getJumlahTanggapanIns($instrumenID)
    {
        return $this
            ->select('userID')
            ->where('instrumenID', $instrumenID)
            ->groupBy('uniqueID')
            ->countAllResults();
    }

    // ---------------- HASIL SURVEI - RESPONDEN --------------------------
    public function getResponseByInstrumenID($id)
    {
        return $this
            ->select('*, response.id as responseID, response.instrumenID as insID')
            ->join('questions', 'questions.instrumenID = response.instrumenID')
            ->where('response.userID', $id)
            ->groupBy('response.uniqueID')
            ->orderBy('response.id', 'desc')
            ->findAll();
    }
    public function cekRiwayatTgl($userID, $instrumenID)
    {
        return $this
            ->where('instrumenID', $instrumenID)
            ->where('userID', $userID)
            ->groupBy('created_at')
            ->orderBy('id', 'desc')
            ->findAll();
    }

    public function getRespondenData($id)
    {
        return $this
            ->join('responden', 'responden.userID = response.userID')
            ->where('response.userID', $id)
            ->groupBy('response.userID')
            ->findAll();
    }

    public function getButirByInstrumenID($id)
    {
        return $this
            ->join('questions', 'questions.instrumenID = response.instrumenID')
            ->where('response.instrumenID', $id)
            ->findAll();
    }


    public function getResponseByQuestID($id, $questionID, $uniqueID)
    {
        return $this
            ->join('questions', 'questions.instrumenID = response.instrumenID')
            ->where('response.userID', $id)
            ->where('response.questionID', $questionID)
            ->where('response.uniqueID', $uniqueID)
            ->groupBy('response.jawaban')
            ->findAll();
    }



    public function getAllResponses($instrumenId, $questionID)
    {
        return $this
            ->join('questions', 'questions.instrumenID = response.instrumenID')
            ->where('response.instrumenID', $instrumenId)
            ->where('response.questionID', $questionID)
            ->groupBy('response.id')
            ->findAll();
    }

    public function getCreatedAtByUniqueID($uniqueID)
    {
        return $this
            ->select('created_at')
            ->where('response.uniqueID', $uniqueID)
            ->groupBy('created_at')
            ->findAll();
    }
}
